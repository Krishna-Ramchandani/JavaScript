import React from "react";
import ExpenseDate from "./ExpenseDate";
import "./ExpenseItem.css";
//import Card from "./Card";

function ExpenseItem(props) {
  // const [title, setTitle] = useState(props.title);
  console.log("Expense Item Evaluated by react");

  //let title = props.title;

  // const clickHandler = () => {
  //   //title = "Updated!";
  //   setTitle("Updated!");
  //   console.log(title);
  // };

  return (
    <div className="expense-item">
      <ExpenseDate date={props.date} />
      <div className="expense-item__description">
        <h2>{props.title}</h2>
        <div className="expense-item__price">${props.amount}</div>
      </div>
      {/* <button onClick={clickHandler}>Change Title</button> */}
    </div>
  );
}

export default ExpenseItem;
