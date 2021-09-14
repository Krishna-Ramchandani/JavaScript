import { StatusBar } from "expo-status-bar";
import React, { useState } from "react";
import { StyleSheet, Text, View, Button } from "react-native";

export default function App() {
  const [outputText, setOutputText] = useState(
    "Open up App.js to start working on your app!"
  );
  return (
    <View style={styles.container}>
      <Text>{outputText}</Text>
      <Text>Krishna Ramchandani</Text>
      <Text>Everything working fine no Error!</Text>

      <Button
        title="Change Text"
        onPress={() => setOutputText("Button Clicked!!!")}
      />
      <Button
        title="Reset"
        onPress={() =>
          setOutputText("Open up App.js to start working on your app!")
        }
      />

      <StatusBar style="auto" />
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: "#fff",
    alignItems: "center",
    justifyContent: "center",
  },
});
