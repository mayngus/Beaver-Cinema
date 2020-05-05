var mysql = require('mysql');
var pool = mysql.createPool({
  connectionLimit : 10,
  host            : 'classmysql.engr.oregonstate.edu',
  user            : 'cs340_hernager',
  password        : '6862',
  database        : 'cs340_hernager'
});

module.exports.pool = pool;
