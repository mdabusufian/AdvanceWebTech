import React from "react";
import { Link } from "react-router-dom";
const Head = () => {
    return(
            <div>
                <center><h1>Welcome Back, User</h1></center>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"></link>
                <div class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="navbar-collapse collapse" id="mobile_menu">
                                    <ul class="nav navbar-nav" id="nave">
                                        <li class=""><a href="/"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                                        <li class=""><a href="/users/list" ><span class="glyphicon glyphicon-pencil"></span> User List</a></li>
                                        <li class=""><a href="/users/add" ><span class="glyphicon glyphicon-pencil"></span> Add User</a></li>
                                        <li class=""><a href="/contact"><span class="glyphicon glyphicon-hourglass"></span>Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            </div>
    )
}
export default Head;