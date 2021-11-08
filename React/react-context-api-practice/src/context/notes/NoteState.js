import React, { useState } from "react";
import CommonContext from "./noteContext";

const NoteState = (props) => {
  const s1 = {
    name: "Krishna",
    age: "21",
  };
  const [state, setState] = useState(s1);
  const update = () => {
    setTimeout(() => {
      setState({
        name: "Meera",
        age: "21",
      });
    }, 3000);
  };
  return (
    <CommonContext.Provider value={{ state, update }}>
      {props.children}
    </CommonContext.Provider>
  );
};

export default NoteState;
