import React from "react";
// import "./App.css";
import Navbar from "./components/Navbar";
import Shop from "./components/Shop";
// import Display from "./components/Display";
// import NoteState from "./context/notes/NoteState";

function App() {
  return (
    <>
      {/* <NoteState>
        <Display />
      </NoteState> */}
      <Navbar />
      <div className="container">
        <Shop />
      </div>
    </>
  );
}

export default App;
