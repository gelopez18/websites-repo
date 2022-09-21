const express = require('express');
const $ = require( "jquery" );
const navbar = require("./UI/nav-bar");
const app = express();
const port = 3000;

const Amortization = require('./routes/amortization');  
const conversion = require('./routes/conversion'); 
app.use('/amortization', Amortization);
app.use('/conversion', conversion);
  
app.listen(port, () => {console.log('working on port 3000')});
