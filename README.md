# Qtec Problem-2
==============================================================
# Problem regarding finding the total number of appearance of a given pattern within a given string.
=============================================================================================
# first we receive the string and pattern and set an pattern appearance counter.
# now we can iterate through each index of the string and consider that index as starting index for pattern matching.
# now we set a pattern index matching counter.
# if the remaining substring length to be matched is not smaller than the pattern, we start iterating the pattern.
# throughout the itertion, we match the pattern index with string index.
# if matched, we increment matching counter.
# after the full iteration of pattern, if the value in matching counter is equal to the length of pattern, then we can say pattern matches with the substring starting from the current index of the string.
# then we can increment the pattern appearance counter and go to the next index of the string to continue same sequence of operation until string iteration ends.