//after running and express --view=pug myapp and creating a view, we need to go to routes folder>index.js and grave the handeler function and create a new folder named controller and export this function to the index under route *R(index comment)

//the controllers helps us seperate handelers logic 

exports.index= function(req, res, next) { //this makes a call to a http method get
    res.render('index', { title: 'Express' });//handeler for  routes
  }
  
//index value reders the index file under the views because on app.js under app.set we call methods to modify the application the 'views' are include  in the dir call 'views' *V(index comment)