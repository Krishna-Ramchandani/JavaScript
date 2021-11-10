import React from "react";
import { useDispatch, useSelector } from "react-redux";
import { bindActionCreators } from "redux";
import { actionCreators } from "../state";

function Shop() {
  const dispatch = useDispatch();
  //   const actions = bindActionCreators(actionCreators, dispatch);
  const { withdrawMoney, depositMoney } = bindActionCreators(
    actionCreators,
    dispatch
  );
  const balance = useSelector((state) => state.amount);

  return (
    <div>
      <h2>Deposit/ Withdraw money</h2>
      <button
        className="btn-primary mx-3"
        onClick={() => {
          //   dispatch(actionCreators.withdrawMoney(100));
          withdrawMoney(100);
        }}
      >
        -
      </button>
      Update Balance ({balance})
      <button
        className="btn-primary mx-3"
        onClick={() => {
          //   dispatch(actionCreators.depositMoney(100));
          depositMoney(100);
        }}
      >
        +
      </button>
    </div>
  );
}

export default Shop;
