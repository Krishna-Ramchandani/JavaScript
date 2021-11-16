import React, { useReducer } from "react";

function ReducerFormDemo() {
  const initialState = {
    fullname: "",
    addressline1: "",
    addressline2: "",
    city: "",
    states: "",
    country: "",
    pincode: "",
  };

  function reducer(state, action) {
    switch (action.type) {
      case "INPUT":
        // console.log("inside INPUT CASE", state, "action", action);
        return {
          ...state,
          [action.key]: action.value,
        };
      default:
        return state;
    }
    // console.log("inside reducer function", state, "action", action);
  }

  const [state, dispatch] = useReducer(reducer, initialState);

  const submitHandler = () => {
    alert(
      JSON.stringify({
        "Full Name= ": state.fullname,
        "Address Line 1": state.addressline1,
        "Address Line 2": state.addressline2,
        City: state.city,
        State: state.states,
        Country: state.country,
        Pincode: state.pincode,
      })
    );
  };

  return (
    <div className="container    form-group">
      <h3>User Details Form</h3>
      <p> Full name = {state.fullname}</p>
      <p> Address Line 1 = {state.addressline1}</p>
      <p> Address Line 2 = {state.addressline2}</p>
      <p> City = {state.city}</p>
      <p> State = {state.states}</p>
      <p> Country = {state.country}</p>
      <p> Pincode = {state.pincode}</p>
      <input
        type="text"
        name="fullname"
        placeholder="Full Name"
        className="form-control my-2"
        value={state.fullname}
        onChange={(e) => {
          dispatch({
            type: "INPUT",
            value: e.target.value,
            key: "fullname",
          });
          console.log("e.target.value", e.target.value);
          console.log("state.fullname", state.fullname);
        }}
      />
      <input
        type="text"
        name="addressline1"
        placeholder="Address Line 1"
        className="form-control my-2"
        value={state.addressline1}
        onChange={(e) => {
          dispatch({
            type: "INPUT",
            value: e.target.value,
            key: "addressline1",
          });
          console.log(e.target.value);
          console.log(state.addressline1);
        }}
      />
      <input
        type="text"
        name="addressline2"
        placeholder="Address Line 2"
        className="form-control my-2"
        value={state.addressline2}
        onChange={(e) => {
          dispatch({
            type: "INPUT",
            value: e.target.value,
            key: "addressline2",
          });
          console.log(e.target.value);
          console.log(state.addressline2);
        }}
      />
      <input
        type="text"
        name="city"
        placeholder="City"
        className="form-control my-2"
        value={state.city}
        onChange={(e) => {
          dispatch({
            type: "INPUT",
            value: e.target.value,
            key: "city",
          });
          console.log(e.target.value);
          console.log(state.city);
        }}
      />
      <input
        type="text"
        name="state"
        placeholder="State"
        className="form-control my-2"
        value={state.states}
        onChange={(e) => {
          dispatch({
            type: "INPUT",
            value: e.target.value,
            key: "states",
          });
          console.log(e.target.value);
          console.log(state.states);
        }}
      />
      <input
        type="text"
        name="country"
        placeholder="Country"
        className="form-control my-2"
        value={state.country}
        onChange={(e) => {
          dispatch({
            type: "INPUT",
            value: e.target.value,
            key: "country",
          });
          console.log(e.target.value);
          console.log(state.country);
        }}
      />
      <input
        type="text"
        name="pincode"
        placeholder="Pin Code"
        className="form-control my-2"
        value={state.pincode}
        onChange={(e) => {
          dispatch({
            type: "INPUT",
            value: e.target.value,
            key: "pincode",
          });
          console.log(e.target.value);
          console.log(state.pincode);
        }}
      />
      <button type="button" className="btn btn-primary" onClick={submitHandler}>
        Submit Button
      </button>
    </div>
  );
}

export default ReducerFormDemo;
