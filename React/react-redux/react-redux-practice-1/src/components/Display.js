import React, { useContext, useEffect } from "react";
import CommonContext from "../context/notes/noteContext";

function Display() {
  const a = useContext(CommonContext);
  useEffect(() => {
    a.update();
    // eslint-disable-next-line
  }, []);

  return (
    <div>
      Hello This is Display Component, Welcome {a.state.name} age is{" "}
      {a.state.age}
    </div>
  );
}

export default Display;
