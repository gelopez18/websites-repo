
//this file defines our web application. we import the modules using require method
const createError = require('http-errors');
const express = require('express'); //>this assigns the variable *E(index comment)
const path = require('path');
const cookieParser = require('cookie-parser');
const logger = require('morgan');

const indexRouter = require('./routes/index');// this import the files that are in the path passed on in the method*R(index comment)
const usersRouter = require('./routes/users');

const app = express(); //>then we call the constructor for the variable and name it app which is an instance *E(index comment)

// view engine setup
app.set('views', path.join(__dirname, 'views')); // we call methods to modify the application the 'views' are include  in the dir call 'views' *V(index comment)
app.set('view engine', 'pug'); // we've install pug as view engine npm install express generator -g then express --view=pug myapp

app.use(logger('dev'));
app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, 'public')));

app.use('/', indexRouter); // this method uses the instance of the route, this is how we connect pieces from the application  *R(index comment)
app.use('/users', usersRouter);

// catch 404 and forward to error handler
app.use(function(req, res, next) {
  next(createError(404));
});

// error handler
app.use(function(err, req, res, next) {
  // set locals, only providing error in development
  res.locals.message = err.message;
  res.locals.error = req.app.get('env') === 'development' ? err : {};

  // render the error page
  res.status(err.status || 500);
  res.render('error');
});

module.exports = app;
