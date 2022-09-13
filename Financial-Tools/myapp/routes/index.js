var express = require('express');
var router = express.Router(); //instance of the express router

/* GET home page. */
router.get('/', function(req, res, next) { //this makes a call to a http method get
  res.render('index', { title: 'Express' });//handeler for this route
});

module.exports = router;
