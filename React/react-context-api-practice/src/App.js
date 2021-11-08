import React from "react";
import Display from "./components/Display";
import NoteState from "./context/notes/NoteState";

function App() {
  return (
    <div className="container">
      <NoteState>
        <Display />
      </NoteState>
    </div>
  );
}

export default App;
