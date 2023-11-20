const express = require('express');
const app = express();
const fs = require('fs');
const cors = require('cors');
const bodyParser = require('body-parser');

//Read Environment Variables
require('dotenv').config();

//Panggil Path Node
const app_path = require('path');

//Setup Logger
const { setupLogging } = require("./logging");

//Setup API Docs
const { setupDocs } = require("./api_docs");

//Define index Routes
const routerIndex = require('./routes/index');

//Define Port Running
const port = process.env.PORT;


//Create Directory for Logger
const path_logs = app_path.join(__dirname, "logs");
try {
    if (!fs.existsSync(path_logs)) {
        fs.mkdirSync(path_logs);
    }
} catch (err) {
    console.error(err);
}

//Run Docs
setupDocs(app, app_path, port);

//To support JSON-encoded bodies
app.use(bodyParser.json());
app.use(
    bodyParser.urlencoded({
        // To support URL-encoded bodies
        extended: true,
    })
);

// CORS 
var allowlist = [
    'http://localhost:3000'
]
var corsOptionsDelegate = function (req, callback) {
    var corsOptions;
    if (allowlist.indexOf(req.header('Origin')) !== -1) {
        corsOptions = {
            origin: true,
            methods: ['GET', 'PUT', 'POST', 'DELETE', 'PATCH'],
            allowedHeaders: ['Content-Type', 'Origin', 'X-Requested-With', 'Accept', 'Authorization', 'x-access-token', 'x-api-key']
        } // reflect (enable) the requested origin in the CORS response
    } else {
        corsOptions = { origin: false } // disable CORS for this request
    }
    callback(null, corsOptions) // callback expects two parameters: error and options
}
app.use(cors(corsOptionsDelegate));

// Main Routes
app.use('/', routerIndex);

//Run Logger
setupLogging(app, path_logs);

//Handle Routes Tidak Diketahui
app.use((req, res, next) => {
    res.status(404);
    res.send({
        message: 'Page Not Found'
    })
    //File HTML res.sendFile('views/page_not_found.html', {root: __dirname });
});

app.listen(port, () => {
    console.log(`Example app listening on port ${port}`)
})