const express = require('express');
const app = express();
  
const test = require('./routes');  
app.use('/', test);
  
app.listen(3000, () => {console.log('working on port 3000')});