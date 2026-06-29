## Using Loops in Bash

This section covers the use of loops in Bash scripting, including for, while, and until loops.

---

## For Loops

For loops allow you to iterate over a list of items or a range of numbers. They are useful for repeating tasks a specific number of times.

The `for` keyword is followed by a variable name, a range of values, and a `do` keyword, which marks the start of the loop block.

### Example: For Loop

```bash
# For loop example
for i in {1..5}; do
  echo "Iteration $i"
done
```

---

## While Loops

While loops execute a block of code as long as a specified condition is true.

They are useful for tasks that need to repeat until a certain condition changes.

The condition is enclosed in square brackets `[ ]`, and the loop ends with `done`.

### Example: While Loop

```bash
# While loop example
count=1
while [ $count -le 5 ]; do
  echo "Count is $count"
  ((count++))
done
```
## Until Loops

Until loops are similar to while loops, but they execute until a specified condition becomes true.

The condition is enclosed in square brackets `[ ]`, and the loop ends with `done`.

### Example: Until Loop

```bash
# Until loop example
count=1
until [ $count -gt 5 ]; do
  echo "Count is $count"
  ((count++))
done
```

---

## Break and Continue

Break and continue statements are used to control loop execution. `break` exits the loop, while `continue` skips to the next iteration.

These statements are typically used inside conditional blocks to alter the flow of the loop.

### Example: Break and Continue

```bash
# Break and continue example
for i in {1..5}; do
  if [ $i -eq 3 ]; then
    continue
  fi
  echo "Number $i"
  if [ $i -eq 4 ]; then
    break
  fi
done
```

---

## Nested Loops

Nested loops allow you to place one loop inside another, enabling more complex iteration patterns.

Each loop must be closed with its own `done`.

### Example: Nested Loops

```bash
# Nested loops example
for i in {1..3}; do
  for j in {1..2}; do
    echo "Outer loop $i, Inner loop $j"
  done
done
```