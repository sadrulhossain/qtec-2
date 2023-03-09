# Qtec Problem-2
** Problem regarding finding the total number of appearance of a given pattern within a given string.
=============================================================================================
1. first we receive the string and pattern and set an pattern appearance counter.
2. now we can iterate through each index of the string and consider that index as starting index for pattern matching.
3. now we set a pattern index matching counter.
4. if the remaining substring length to be matched is not smaller than the pattern, we start iterating the pattern.
5. throughout the itertion, we match the pattern index with string index.
6. if matched, we increment matching counter.
7. after the full iteration of pattern, if the value in matching counter is equal to the length of pattern, then we can say pattern matches with the substring starting from the current index of the string.
8. then we can increment the pattern appearance counter and go to the next index of the string to continue same sequence of operation until string iteration ends.