import { StatusBar } from "expo-status-bar";
import React, { useState } from "react";
import {
  Image,
  StyleSheet,
  Text,
  TextInput,
  View,
  Button,
  ScrollView,
  FlatList,
} from "react-native";

export default function App() {
  const [enteredGoal, setEnteredGoal] = useState("");
  const [courseGoals, setCourseGoals] = useState([]);

  const textHandler = (enteredText) => {
    setEnteredGoal(enteredText);
  };

  const addButtonHandler = () => {
    // console.log(enteredGoal);
    setCourseGoals([
      ...courseGoals,
      { key: Math.random().toString(), value: enteredGoal },
    ]);
    //setCourseGoals([...courseGoals, enteredGoal]);
    // setCourseGoals((currentGoals) => [...currentGoals, enteredGoal]);
  };

  return (
    //<ScrollView>
    <View style={styles.screen}>
      <View style={styles.insideView}>
        <TextInput
          placeholder="Course Goal"
          style={styles.inputText}
          onChangeText={textHandler}
          value={enteredGoal}
        />

        <Button title="ADD" onPress={addButtonHandler} />
      </View>
      <FlatList
        data={courseGoals}
        renderItem={(itemData) => (
          <View style={styles.listItem}>
            <Text>{itemData.item.value}</Text>
          </View>
        )}
      />
      {/* ID give warning if using in place of key then use keyExtractor */}
      {/* <ScrollView> */}
      {/* {courseGoals.map((goal) => (
          <View key={Math.random().toString()} style={styles.listItem}>
            <Text>{goal}</Text>
          </View>
        ))} */}
      {/* </ScrollView> */}
    </View>
    //</ScrollView>
  );
}

const styles = StyleSheet.create({
  screen: { padding: 50 },
  insideView: {
    flexDirection: "row",
    justifyContent: "space-between",
    alignItems: "center",
  },
  inputText: {
    width: "80%",
    // height: 300,
    borderBottomColor: "black",
    //borderStyle: "dotted",
    borderWidth: 1,
    padding: 10,
    //flex: 1,
  },

  listItem: {
    padding: 10,
    margin: 10,
    backgroundColor: "#ccc",
    borderColor: "black",
    borderWidth: 1,
  },
});
