
This is my first readme that I will probably write in my life.

# What's the point of this?
- I had a day off, wanted to test my way of validating data, maybe one day it will be used more. Who knows, it's craazy world out there.

# Will this be using DB?
- Yeah! I will hook this to use database and extend functionality soon!

# What's the next step? 
- I plan on using attributes in the future to validate data. At the moment is bare bones. 
- I want to have this in future. First I gotta get my MVP working.
#[CoolValidationRule]
private readonly string $hackyData;

- Also I want to make "typeOf", so you can write for example:
  - private $fillable = ['attributes' = ['typeof': 'array-with:string' ], ['rules': SomeCoolArrayRules::class]]
    - This would mean data must be array of strings (string array)
  - Also some additional properties, such as 'uniqueValues' meaning that array must have unique values
    - private $fillable = ['attributes' = ['typeof': 'array-with:string', uniqueValues'], ['rules': SomeCoolArrayRules::class]]
  - Or maybe ignoreDuplicates which would remove duplicates during insert and it would insert only unique data
    - private $fillable = ['attributes' = ['typeof': 'array-with:string', 'ignoreDuplicates'], ['rules': SomeCoolArrayRules::class]]

# How to run this?
- Look at testing.php. I GitIgnored my index.php so you don't see my hacky magic.