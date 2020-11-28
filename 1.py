
def kalori(kal):
	if kal > 750 :
		OR = "Lari"	
	elif kal > 500:
		OR = "Badminton"
	else: 
		OR = "Renang"

	wkt = kal / 10
	print ("jumlah kal: %i kalori" %kal)
	print ("Jenis Olahraga: %s" %OR)
	print ("Waktu olahraga: %i mnt" %wkt)	

kalori(765)