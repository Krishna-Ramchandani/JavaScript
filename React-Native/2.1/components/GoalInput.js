import React, { useState } from "react";
import {
  View,
  TextInput,
  Button,
  StyleSheet,
  TouchableOpacity,
  Touchable,
  Modal,
} from "react-native";

const GoalInput = (props) => {
  const [enteredGoal, setEnteredGoal] = useState("");

  const goalInputHandler = (enteredText) => {
    setEnteredGoal(enteredText);
  };

  const addGoalHandler = () => {
    props.onAddGoal(enteredGoal);
    setEnteredGoal("");
  };

  return (
    <Modal visible={props.visible} animationType="slide">
      <View style={styles.inputContainer}>
        <TextInput
          placeholder="Course Goal"
          style={styles.input}
          onChangeText={goalInputHandler}
          value={enteredGoal}
        />
        <View style={styles.btnPosition}>
          <View style={styles.btnSize}>
            <Button title="ADD" onPress={addGoalHandler} />
          </View>
          <View style={styles.btnSize}>
            <Button title="CANCEL" color="red" onPress={props.onCancel} />
          </View>
        </View>
        {/* props.onAddGoal.bind(this, enteredGoal) */}
      </View>
    </Modal>
  );
};

const styles = StyleSheet.create({
  inputContainer: {
    //flexDirection: "row",
    //justifyContent: "space-between",
    flex: 1,
    justifyContent: "center",
    alignItems: "center",
  },
  input: {
    width: "80%",
    borderColor: "black",
    borderWidth: 1,
    padding: 10,
    marginBottom: 10,
  },
  btnPosition: {
    flexDirection: "row",
    justifyContent: "space-between",
    width: "60%",
  },
  btnSize: {
    width: "40%",
  },
});

export default GoalInput;
