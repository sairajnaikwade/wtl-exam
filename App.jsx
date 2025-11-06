import { useActionState, useState } from 'react';
import './App.css';
import First from "./components/First";
import Second from "./components/Second"; 
import axios from "axios";
function App() {
  const [data,setData]=useState([]);
  const [loading,setLoading]=useState(false);
  const [error,setError]=useState(" ");
 

  function fetchData(){
    setLoading(true);
    axios.get("/data.json")
    .then(res=>{
      console.log(res.data);
      setData(res.data);
      setLoading(false);
    })

    .catch(()=>{
      setError("Fail To Fetch Data");
      setLoading(false);
    })
  }

  return (
   <>
  <h1>List</h1>
  <button onClick={fetchData}>fetch Data</button>

  {loading && <p>loading...</p>}
  {error && <p>{error}</p>}

  <ul>
    {data.map((user)=>(
      <li key={user.id}>
        {user.name}-{user.username}-{user.email}
      </li>
    ))}
  </ul>

  
     
    </>
  )
}

export default App
