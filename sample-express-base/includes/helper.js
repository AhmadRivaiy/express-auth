module.exports = {
    filterObj,
    isAllowedAccess,
    getPagination,
    groupThreeLayerArray,
    orderBySql,
    multipleOrderBySql
};

function filterObj(objKu, filter = []) {
    return Object.keys(objKu)
        .filter(key => filter.includes(key) && (objKu[key] !== null && objKu[key] !== ''))
        .reduce((obj, key) => {
            obj[key] = objKu[key];
            return obj;
        }, {});
}

function isAllowedAccess(level, policy) {
    return policy.level.includes(level) || level.every(val => policy.level.includes(val))
}

function getPagination(page, size, isPagination = false) {
    const limit = isPagination ? size ? +size : 10000000000 : 10000000000;
    const offset = isPagination ? page == 0 ? 0 : page ? (page - 1) * limit : 0 : 0;

    return { limit, offset };
};

function groupThreeLayerArray(myArray = [], nameKey = 'create_date', titleKey = 'title') {
    let finalData = [];
    const grouped = myArray.reduce((groups, item) => {
        const value = item[nameKey];
        groups[value] = groups[value] || [];
        groups[value].push(item);
        return groups;
    }, {});

    for (const key in grouped) {
        finalData.push({ [titleKey]: grouped[key][0][titleKey], jumlah: grouped[key]?.length, values: grouped[key] });
    }

    return finalData;
}

//Function to help order by
// sample to use : array.sort(order_by('name', true, function (a) { return a.toUpperCase() }));
function order_by(field, reverse, primer) {
    var key = primer ?
        function (x) { return primer(x[field]) } :
        function (x) { return x[field] };

    reverse = !reverse ? 1 : -1;

    return function (a, b) {
        return a = key(a), b = key(b), reverse * ((a > b) - (b > a));
    }
}

//Function to help order by on table SQL Sequelize
// sample to use : order_by_sql('name', true);
function orderBySql(field, reverse) {
    reverse = !reverse ? 'ASC' : 'DESC';

    return [[field, reverse]];
}

function multipleOrderBySql(order_by, order_type) {
    let order = [];

    if (order_by !== undefined && order_by !== '' &&
        order_type !== undefined && order_type !== '') {
        // Mendapatkan daftar nilai order_by dan order_type dari URL
        const order_by_values = Array.isArray(order_by) ? order_by : [order_by];
        const order_type_values = Array.isArray(order_type) ? order_type : [order_type];

        // Mengambil jumlah maksimum order_by yang akan diambil
        const maxOrders = Math.min(order_by_values.length, order_type_values.length);

        for (let i = 0; i < maxOrders; i++) {
            order.push(orderBySql(order_by_values[i], order_type_values[i] === 'desc' ? true : false));
        }
    }
    return order;
}