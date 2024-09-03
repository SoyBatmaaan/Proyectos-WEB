import pg from "pg";

const pool = new pg.Pool({
  user: 'postgres',
  password: 'ektadc123',
  host: 'localhost',
  port: 5432,
  database: 'nodepgLoginDemo',
});
console.log("pool creada");

export { pool };
