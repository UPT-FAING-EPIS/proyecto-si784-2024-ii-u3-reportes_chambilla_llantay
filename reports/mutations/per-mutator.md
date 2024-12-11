# Effects per Mutator

| Mutator                | Mutations | Killed | Escaped | Errors | Syntax Errors | Timed Out | Skipped | Ignored | MSI (%s) | Covered MSI (%s) |
| ---------------------- | --------- | ------ | ------- | ------ | ------------- | --------- | ------- | ------- | -------- | ---------------- |
| ArrayItemRemoval       |        49 |     35 |      13 |      0 |             0 |         1 |       0 |       0 |    73.47 |            73.47 |
| Coalesce               |         1 |      0 |       1 |      0 |             0 |         0 |       0 |       0 |     0.00 |             0.00 |
| Concat                 |        29 |      3 |      24 |      0 |             0 |         2 |       0 |       0 |    17.24 |            17.24 |
| ConcatOperandRemoval   |        50 |      7 |      39 |      0 |             0 |         4 |       0 |       0 |    22.00 |            22.00 |
| DecrementInteger       |         5 |      3 |       2 |      0 |             0 |         0 |       0 |       0 |    60.00 |            60.00 |
| FalseValue             |        22 |     19 |       3 |      0 |             0 |         0 |       0 |       0 |    86.36 |            86.36 |
| Foreach_               |        14 |     13 |       1 |      0 |             0 |         0 |       0 |       0 |    92.86 |            92.86 |
| FunctionCall           |         2 |      2 |       0 |      0 |             0 |         0 |       0 |       0 |   100.00 |           100.00 |
| FunctionCallRemoval    |        17 |      3 |      13 |      0 |             0 |         1 |       0 |       0 |    23.53 |            23.53 |
| GreaterThan            |         5 |      4 |       1 |      0 |             0 |         0 |       0 |       0 |    80.00 |            80.00 |
| GreaterThanNegotiation |         5 |      5 |       0 |      0 |             0 |         0 |       0 |       0 |   100.00 |           100.00 |
| IncrementInteger       |         2 |      1 |       1 |      0 |             0 |         0 |       0 |       0 |    50.00 |            50.00 |
| LessThan               |         1 |      0 |       1 |      0 |             0 |         0 |       0 |       0 |     0.00 |             0.00 |
| LessThanNegotiation    |         1 |      1 |       0 |      0 |             0 |         0 |       0 |       0 |   100.00 |           100.00 |
| LogicalAnd             |         1 |      1 |       0 |      0 |             0 |         0 |       0 |       0 |   100.00 |           100.00 |
| LogicalNot             |         7 |      7 |       0 |      0 |             0 |         0 |       0 |       0 |   100.00 |           100.00 |
| LogicalOr              |         3 |      3 |       0 |      0 |             0 |         0 |       0 |       0 |   100.00 |           100.00 |
| MethodCallRemoval      |       100 |     49 |      51 |      0 |             0 |         0 |       0 |       0 |    49.00 |            49.00 |
| NewObject              |         2 |      2 |       0 |      0 |             0 |         0 |       0 |       0 |   100.00 |           100.00 |
| ProtectedVisibility    |         2 |      2 |       0 |      0 |             0 |         0 |       0 |       0 |   100.00 |           100.00 |
| PublicVisibility       |        98 |     98 |       0 |      0 |             0 |         0 |       0 |       0 |   100.00 |           100.00 |
| Ternary                |         4 |      2 |       0 |      0 |             0 |         2 |       0 |       0 |   100.00 |           100.00 |
| This                   |         2 |      1 |       1 |      0 |             0 |         0 |       0 |       0 |    50.00 |            50.00 |
| Throw_                 |         4 |      3 |       1 |      0 |             0 |         0 |       0 |       0 |    75.00 |            75.00 |
| TrueValue              |         9 |      8 |       0 |      0 |             0 |         1 |       0 |       0 |   100.00 |           100.00 |
