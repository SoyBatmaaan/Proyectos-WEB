console.log("hola 1");
import { pool } from "./connectDB.js";
console.log("hola 2");

const getUser = async()=>{
  try{
    const result = await pool.query("SELECT u.usuario, r.nombrerol FROM usuarios u JOIN roles r ON u.idrol = r.id;");
    console.log(result.rows);
    console.log("Usuarios obtenidos correctamente.");
  }catch(error){
    console.error(error);
  }
};

const info = getUser();
console.log(info);
export {info};








/*
const app = express();
const pool = new Pool({
    user: 'tu_usuario',
    host: 'localhost',
    database: 'tu_base_de_datos',
    password: 'tu_contraseña',
    port: 5432,
}); 

const getUser = async()=>{
    try{
      const result = await pool.query("SELECT u.usuario, r.nombrerol FROM usuarios u JOIN roles r ON u.idrol = r.id;");
      console.log(result.rows);
      console.log("Usuarios obtenidos correctamente.");
    }catch(error){
      console.error(error);
    }
};

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