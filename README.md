PerformanceTests
================

`coefficient` is total time (in milliseconds) * memory peak (best one of 5)

# PHP 7.1

## List test - add/map: 10000
| Collection           | coefficient | vs 5.6 |
|----------------------|-------------|--------|
| Array                | 30191       |        |
| GenericList          | 241822      |   +    |
| List                 | 255501      |   -    |
| ArrayCollection      | 893482      |   N/A  |
| LinkedList           | 975359      |        |
| ImmutableList        | 1075563     |        |
| ImmutableGenericList | 1598440     |        |

## List test - add/map: 1000
| Collection           | coefficient | vs 5.6 |
|----------------------|-------------|--------|
| Array                | 929         |        |
| List                 | 2333        |        |
| ImmutableList        | 5647        |   ++   |
| GenericList          | 10279       |   -    |
| LinkedList           | 27823       |   -    |
| ImmutableGenericList | 28009       |        |
| ArrayCollection      | 29784       |   N/A  |

## List test - add/map: 100
| Collection           | coefficient | vs 5.6 |
|----------------------|-------------|--------|
| Array                | 131         |        |
| List                 | 311         |        |
| ImmutableList        | 346         |        |
| GenericList          | 1299        |        |
| LinkedList           | 1756        |        |
| ImmutableGenericList | 1767        |        |
| ArrayCollection      | 3569        |   N/A  |


# PHP 5.6

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
| ImmutableList        | 670         |
| GenericList          | 1362        |
| LinkedList           | 2006        |
| ImmutableGenericList | 2569        |
