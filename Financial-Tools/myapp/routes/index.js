var express = require('express');
var router = express.Router(); //instance of the express router
let index = require('../controllers/index');//import the index from the folder created controllers*R(index comment)
/* GET home page. */
router.get('/', index.index); //we call the index from the instance of the object

module.exports = router;
