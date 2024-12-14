# Effects per Mutator

| Mutator                | Mutations | Killed | Escaped | Errors | Syntax Errors | Timed Out | Skipped | Ignored | MSI (%s) | Covered MSI (%s) |
| ---------------------- | --------- | ------ | ------- | ------ | ------------- | --------- | ------- | ------- | -------- | ---------------- |
| ArrayItemRemoval       |        54 |     38 |      15 |      0 |             0 |         1 |       0 |       0 |    72.22 |            72.22 |
| Coalesce               |         1 |      0 |       1 |      0 |             0 |         0 |       0 |       0 |     0.00 |             0.00 |
| Concat                 |        28 |      3 |      23 |      0 |             0 |         2 |       0 |       0 |    17.86 |            17.86 |
| ConcatOperandRemoval   |        49 |      7 |      38 |      0 |             0 |         4 |       0 |       0 |    22.45 |            22.45 |
| DecrementInteger       |         5 |      3 |       2 |      0 |             0 |         0 |       0 |       0 |    60.00 |            60.00 |
| FalseValue             |        27 |     22 |       5 |      0 |             0 |         0 |       0 |       0 |    81.48 |            81.48 |
| Foreach_               |        13 |     12 |       1 |      0 |             0 |         0 |       0 |       0 |    92.31 |            92.31 |
| FunctionCall           |         2 |      2 |       0 |      0 |             0 |         0 |       0 |       0 |   100.00 |           100.00 |
| FunctionCallRemoval    |        18 |      3 |      14 |      0 |             0 |         1 |       0 |       0 |    22.22 |            22.22 |
| GreaterThan            |         5 |      4 |       1 |      0 |             0 |         0 |       0 |       0 |    80.00 |            80.00 |
| GreaterThanNegotiation |         5 |      5 |       0 |      0 |             0 |         0 |       0 |       0 |   100.00 |           100.00 |
| IncrementInteger       |         2 |      1 |       1 |      0 |             0 |         0 |       0 |       0 |    50.00 |            50.00 |
| LessThan               |         1 |      0 |       1 |      0 |             0 |         0 |       0 |       0 |     0.00 |             0.00 |
| LessThanNegotiation    |         1 |      1 |       0 |      0 |             0 |         0 |       0 |       0 |   100.00 |           100.00 |
| LogicalAnd             |         1 |      1 |       0 |      0 |             0 |         0 |       0 |       0 |   100.00 |           100.00 |
| LogicalNot             |         9 |      8 |       1 |      0 |             0 |         0 |       0 |       0 |    88.89 |            88.89 |
| LogicalOr              |         5 |      3 |       2 |      0 |             0 |         0 |       0 |       0 |    60.00 |            60.00 |
| MethodCallRemoval      |        88 |     46 |      42 |      0 |             0 |         0 |       0 |       0 |    52.27 |            52.27 |
| NewObject              |         2 |      2 |       0 |      0 |             0 |         0 |       0 |       0 |   100.00 |           100.00 |
| ProtectedVisibility    |         2 |      2 |       0 |      0 |             0 |         0 |       0 |       0 |   100.00 |           100.00 |
| PublicVisibility       |        97 |     97 |       0 |      0 |             0 |         0 |       0 |       0 |   100.00 |           100.00 |
| Ternary                |         4 |      2 |       0 |      0 |             0 |         2 |       0 |       0 |   100.00 |           100.00 |
| This                   |         2 |      1 |       1 |      0 |             0 |         0 |       0 |       0 |    50.00 |            50.00 |
| Throw_                 |         4 |      3 |       1 |      0 |             0 |         0 |       0 |       0 |    75.00 |            75.00 |
| TrueValue              |         9 |      8 |       0 |      0 |             0 |         1 |       0 |       0 |   100.00 |           100.00 |
