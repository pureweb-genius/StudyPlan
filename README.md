Hello,
We have a Student's List and list of study plans. 
So, we should create a study plan, for all actual students,
whose don't have it.
I wrote two methods, in order to solve this problem.
1)Effective solve has a time complexity O(N).
We just use two loops and it give us kinda O(N+N)=O(N).
I turned indexes of array into some note '2-19-202'
in order to simplify finding an actual students and avoid duplicates.
2)NaiveSolve has a time complexity O(N^2) cause using nested loops 
