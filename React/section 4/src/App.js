//import './App.css';
import React from "react";
//import ExpenseItem from "./components/Expenses/ExpenseItem";
import Expenses from "./components/Expenses/Expenses";
import NewExpense from "./components/NewExpense/NewExpense";
function App() {
  const expenses = [
    { id: "e1", title: "Thing 1", amount: "100", date: new Date(2021, 7, 1) },
    { id: "e2", title: "Thing 2", amount: "200", date: new Date(2021, 8, 1) },
    { id: "e3", title: "Thing 3", amount: "300", date: new Date(2021, 6, 1) },
    { id: "e4", title: "Thing 4", amount: "400", date: new Date(2021, 4, 1) },
  ];

const addExpenseHandler = expense =>{
  console.log("In App.js");
  console.log(expense);

}
  // return React.createElement(
  //   "div",
  //   {},
  //   React.createElement("h2", {}, "First React Program"),
  //   React.createElement(Expenses, { items: expenses })
  // );

  return (
    <div className="App">
      <h2>First React Program</h2>
      <NewExpense onAddExpense={addExpenseHandler} />
      <p>This is a paragraph</p>
      <Expenses items={expenses} />
    </div>
  );
}

export default App;
