// use {useState}
import axios from "axios";

const [loginInput, setLogin] = useState({
    username: '',
    password: '' 
});

const handleInput = (e) => {
    e.persist();
    setLogin({...loginInput, [e.target.name]: e.target.value});
}

const loginSubmit = (e) => {
    e.preventDefault();
    
    const data = {
        username: loginInput.username,
        password: loginInput.password,
    }

    axios.post('api/login', data).then ( res=> {

    });

}



// taruh value sebelum class
// onchange={handleInput} value={loginInput.username}
// onchange={handleInput} value={loginInput.password} 

// onsubmit={loginSubmit}