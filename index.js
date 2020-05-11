var express = require('express');
var path = require('path');
var app = express();
var handlebars = require('express-handlebars').create({defaultLayout:'main'});

app.use(express.static(path.join(__dirname, 'public')));

app.engine('handlebars', handlebars.engine);
app.set('view engine', 'handlebars');
app.set('port', 6869);

app.get('/', function(req, res) {
  res.render('home');
});

app.get('/search',function(req,res){
  res.render('search');
});

app.get('/update',function(req,res){
  res.render('update');
});

app.get('/movies',function(req,res){
  res.render('movies');
});

app.get('/actors',function(req,res){
  res.render('actors');
});

app.get('/genres',function(req,res){
  res.render('genres');
});

app.use(function(req,res){
  res.status(404);
  res.render('404');
});

app.use(function(err, req, res, next){
  console.error(err.stack);
  res.type('plain/text');
  res.status(500);
  res.render('500');
});

app.listen(app.get('port'), function(){
  console.log('Express started on http://flipX.engr.access.edu:' + app.get('port') + '; press Ctrl-C to terminate.');
});
