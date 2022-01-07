import React, {useState} from 'react'
import axios from 'axios'

function App() {

    const [fname, setFname] = useState("");
    const [lname, setLname] = useState("");
    const [uname, setUname] = useState("");
    const [pwd, setPwd] = useState("");
    const send = e =>{
        e.preventDefault();
        axios.post("http://localhost/repenharjoitus/login.php",{
        fname: fname,
        lname: lname,
        uname: uname,
        pwd: pwd
    })
    .catch(e=> console.log(e))
    }


    return [
        <div>
            <form>
            <input value={fname} onChange={e =>setFname(e.target.value)}/>
            <input value={lname} onChange={e =>setLname(e.target.value)}/>
            <input value={uname} onChange={e =>setUname(e.target.value)}/>
            <input value={pwd} onChange={e =>setPwd(e.target.value)}/>
            <button onClick={send}>OK</button>
            </form>
        </div>
    ]
}