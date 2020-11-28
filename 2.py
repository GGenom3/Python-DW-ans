def putarArray(arr=['a','b','c','d','e']):
	for i in range(1,5):
		x = arr[i:] + arr[:i]
		print ("Putaran ke %i: " %i, *x)
putarArray()