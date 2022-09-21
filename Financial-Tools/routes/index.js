
const express = require('express');
const Router = express.Router();
   
Router.route('/')
.all((req, res, next) => { 
    res.statusCode = 200;
    res.setHeader('Content-Type', 'text/plain');
    next();
})
.get((req, res, next) => {
    res.end('When a GET request is made, then this '
            + 'is the response sent to the client!');
})
   
module.exports = Router;