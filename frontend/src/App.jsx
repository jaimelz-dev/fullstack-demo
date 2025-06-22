import { useEffect, useState } from "react";
import "./App.css";
function App() {
    const [message, setMessage] = useState("");
    useEffect(() => {
        fetch("/api/texts")
            .then((res) => res.json())
            .then((data) => setMessage(data.message));
    }, []);
    return (
        <div>
            <h1>React Frontend Application</h1>
            <p>
                This application connects to the Symfony backend requesting a response
            </p>
            <p>Backend response: {message || "Waiting for server response..."}</p>
        </div>
    );
}
export default App;