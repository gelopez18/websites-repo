var express = require('express');
var router = express.Router(); //instance of the express router
let landing = require('../controllers/landing');//import the index from the folder created controllers*R(index comment)
/* GET home page. */
router.get('/', landing.get_landing); //we call the index from the instance of the object

module.exports = router;
