const mysql = require('mysql');
export class main {
    constructor(){
        const conn = mysql.createConnection({
            host: 'localhost',
            user: 'fpan004',
            password: '22443',
            database: 'userpractice'
          });
          
          conn.connect((err) => {
            if (err) throw err;
            console.log('Connected to MySQL Server!');
          });
    }
}
