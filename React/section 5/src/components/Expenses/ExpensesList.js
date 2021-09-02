import "./ExpenseItem.css";
import React from "react";
import ExpenseItem from "./ExpenseItem";

const ExpensesList = (props) => {
  //   let expensesContent = (
  //     <p>
  //       <font color="#fff">No Expenses Found</font>
  //     </p>
  //   );

  if (props.items.length === 0) {
    return <h2 className="expenses-list__fallback"> Found no expenses.</h2>;
  }

  return (
    <ul className="expense-list">
      {props.items.map((expense) => (
        <ExpenseItem
          key={expense.id}
          title={expense.title}
          amount={expense.amount}
          date={expense.date}
        />
      ))}
    </ul>
  );
};
export default ExpensesList;
