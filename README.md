PerformanceTests
================

`coefficient` is total time (in milliseconds) * memory peak (best one of 5)

## List test - add/map: 10000
| Collection           | coefficient |
|----------------------|-------------|
| Array                | 224047      |
| List                 | 255501      |
| GenericList          | 848138      |
| LinkedList           | 2238822     |
| ImmutableList        | 69434425    |
| ImmutableGenericList | 72692814    |

## List test - add/map: 1000
| Collection           | coefficient |
|----------------------|-------------|
| Array                | 3006        |
| List                 | 8446        |
| GenericList          | 17291       |
| LinkedList           | 45773       |
| ImmutableList        | 52669       |
| ImmutableGenericList | 118369      |

## List test - add/map: 100
| Collection           | coefficient |
|----------------------|-------------|
| Array                | 185         |
| List                 | 404         |
| GenericList          | 1362        |
| LinkedList           | 2006        |
| ImmutableList        | 670         |
| ImmutableGenericList | 2569        |
