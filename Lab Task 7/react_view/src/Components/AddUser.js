import React, {useState, useEffect} from "react";
import axios, { Axios } from "axios";
import '../AddUser.css';
const AddUser = () => {
    const [name, setnames] = useState([]);
    const [email, setemails] = useState([]);
    const [password, setpasswords] = useState([]);
    const [cpassword, setcpasswords] = useState([]);

    // useEffect(()=>{
    //     async function addusers(){
    //         try{
    //             const users = await axios.get("http://127.0.0.1:8000/api/users/add/")
    //             console.log(users.data)
    //             setusers(users.data)
    //         }
    //         catch (error){
    //             console.log(error)
    //         }
    //     }
    // },[]);

    const submit = (e) =>{
        e.preventDefault();
        Axios.post('http://127.0.0.1:8000/api/users/add/', {
        name,
        email,
        password
        }).then(res => console.log('Posting Data', res)).catch(err => console.log(err))
    }

    return (

    <div className="AddUser" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
        <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>

        <div>
            <h1>ADD USERS</h1>
        </div>
        <hr></hr>
        <br></br>
        <div id="container">
            <form action="" method="POST" id="form">
                <div id="container1">
                        <br></br>
                    <div class="col-75">
                        <label>Name :</label>
                        <input type="text" id="uname" name="uname" placeholder="Enter User Name" value={name} onChange={(e) => setnames(e.target.value)} class="form-control"/>
                        <br></br>
                    </div>
                    <div class="col-75">
                        <label>Email Address :</label> 
                        <input type="email" id="email" name="email" placeholder="Enter Email Address" value={email} onChange={(e) => setemails(e.target.value)} class="form-control"/>
                        <br></br>
                    </div>
                    <div class="col-75">
                        <label>Password :</label> 
                        <input type="password" id="password" name="password" placeholder="Enter Password" value={password} onChange={(e) => setpasswords(e.target.value)} class="form-control"/>
                    </div>
                    <div class="col-75">
                        <label>Confirm Password :</label> 
                        <input type="password" id="cpassword" name="cpassword" placeholder="Enter Password" value={cpassword} onChange={(e) => setcpasswords(e.target.value)} class="form-control"/>
                    </div>
                    <br></br>
                    <input type="submit" name="Start" onClick={submit} value="Submit"></input>
                </div>
            </form>
        </div>
    </div>
    );
}

export default AddUser;