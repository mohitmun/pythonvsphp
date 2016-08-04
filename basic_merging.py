from PyPDF2 import PdfFileMerger
import time
merger = PdfFileMerger()

input1 = open("p1.pdf", "rb")
input2 = open("p2.pdf", "rb")
input3 = open("p3.pdf", "rb")

# add the first 3 pages of input1 document to output
merger.append(fileobj = input1)

# insert the first page of input2 into the output beginning after the second page
merger.merge(position = 2, fileobj = input2)

# append entire input3 document to the end of the output document
merger.append(input3)
# Write to an output PDF document
output = open("python_merged.pdf", "wb")
merger.write(output)
