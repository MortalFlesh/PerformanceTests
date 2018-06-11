let isprime n =
    let rec check i =
        i > n/2 || (n % i <> 0 && check (i + 1))
    check 2

let mutable counter = 0;
let x = 
    Seq.initInfinite (fun i -> i + 1)
    |> Seq.map (fun i -> 
        counter <- counter + 1
        i
    )
    |> Seq.filter isprime
    |> Seq.take 100
    |> Seq.toArray

printfn "Checked numbers: %d" counter
printfn "%A" x
