import React, {useState, useEffect} from "react";
import axios from "axios";
const User = () => {
    const [users, setusers] = useState([]);

    useEffect(()=>{
        async function getallusers(){
            try{
                const users = await axios.get("http://127.0.0.1:8000/api/users/list/")
                console.log(users.data)
                setusers(users.data)
            }
            catch (error){
                console.log(error)
            }
        }
        getallusers();
    },[]);

    return (

        <div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            
    <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>

    <center><h1>User List</h1></center>
    <br></br>
             <div id="UserTable">

                     <div class="panel panel-default">
                         <div class="panel-heading">
                             <h3 class="panel-title"> <span class="glyphicon glyphicon-user">  </span> User List</h3>
                         </div>
                         <div class="panel-body">
                             <div class="table-responsive">
                                 <table id="editable" class="table table-bordered table-striped">
                                     <thead>
                                         <tr>
                                         <th>ID</th>
                                         <th>User Name</th>
                                         <th>Email Address</th>
                                         </tr>
                                     </thead>
                                     <tbody id="myTable">
                                     {users.map(user=>(
                                        <tr key={user.id}>
                                             <td >{user.id}</td>
                                            <td >{user.name}</td>
                                            <td >{user.email}</td>
                                        </tr>
                                        ))}
                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
            </div>


        </div>
    
    
    );
}

export default User;