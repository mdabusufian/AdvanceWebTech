import React from "react";
import '../App.css';
const Foot = () => {
    return(
        <div className="App" >
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></link>
            <footer>
                <div class="footer-content">
                    <h3>React App</h3>
                    <p>Simple Footer.</p>
                    <ul class="socials">
                        <li><a target = '_blank' href="https://www.facebook.com/Hakernadim"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                    </ul>
                </div>
                <div class="footer-bottom">
                    <p>copyright &copy;2022 React App. designed by <span>Group 7</span></p>
                </div>
            </footer>
        </div>
    )
}
export default Foot;