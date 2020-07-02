# Typescript

## Table of contents

### Snapshots
- How to set up snapshot testing (from scratch) with jest
    - Since you need jest, you should start package.json with `npm init -y`
    - Install typescript `npm i typescript`
    - Install jest with its ts loader `npm i -D jest ts-jest`
    - Install ts types for jest: `npm i -D @types/jest`
    - Configure jest to use ts-jest 
        ```json
        {
            "jest": {
            "preset": "ts-jest"
            }
        }
        ``` 
    - Assertion: `expect(result).toMatchSnapshot()`