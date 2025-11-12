import { execSync } from "child_process";
import { readFileSync } from "fs";

export default function handler(req, res) {
  try {
    const output = execSync("php api/index.php", { encoding: "utf8" });
    res.status(200).send(output);
  } catch (err) {
    res.status(500).send(err.message);
  }
}
