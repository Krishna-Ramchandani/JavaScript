import React, { useReducer } from "react";

const intialState = 0;
const reducer = (state, action) => {
  console.log(state, action);
  if (action.type === "PLUS") {
    return state + 1;
  }
  if (action.type === "MINUS") {
    return state - 1;
  }
  //   if (action.type === "INPUT") {
  //     return state;
  //   }
  return state;
};

function ReducerDemo() {
  const [state, dispatch] = useReducer(reducer, intialState);
  return (
    <div>
      <p>{state}</p>
      {/* <input type="text" onChange={() => dispatch({ type: "INPUT" })} />{" "} */}
      <button onClick={() => dispatch({ type: "PLUS" })}>PLUS</button>{" "}
      <button onClick={() => dispatch({ type: "MINUS" })}>MINUS</button>
    </div>
  );
}

export default ReducerDemo;
