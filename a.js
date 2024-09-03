const form = document.querySelector('form');

form.addEventListener('submit', async (e) => {
  e.preventDefault();

  const username = document.getElementById('regUser').value;
  const email = document.getElementById('regEmail').value;
  const password = document.getElementById('regPassword').value;
  console.log(username, email, password);
});    

console.log("a.js ejecutandose");

/*
import { pool } from "./connectDB.js";
console.log("import conexion listo");

const username = document.getElementById('regUser').value;
const email = document.getElementById('regEmail').value;
const password = document.getElementById('regPassword').value;
console.log(username, email, password)

const addUser = async()=>{
    try{
    const result = await pool.query("insert into usuarios (usuario, email, contrasena, idrol)" + 
      "values ($1,$2,$3,$4);", [username,email,password,2]);
      console.log(result.rows);
      console.log("Usuario registrado!");
    }catch(error){
      console.error(error);
      console.log("USUARIO NO PUDO SER REGISTRADO!");
    }
  };
*/