//after running and express --view=pug myapp and creating a view, we need to go to routes folder>index.js and grave the handeler function and create a new folder named controller and export this function to the index under route *R(index comment)

//the controllers helps us seperate handelers logic 

exports.get_landing= function(req, res, next) { //this makes a call to a http method get
    res.render('landing', { title: 'Express' });//handeler for  routes
  }
//index value reders the index file under the views because on app.js under app.set we call methods to modify the application the 'views' are include  in the dir call 'views' *V(index comment)

//
  exports.submit_lead= function(req, res, next) { //this makes a call to a http method get
    console.log("lead email:", req.body.lead_email);//handeler for  routes
    res.redirect('/');
  }
  
