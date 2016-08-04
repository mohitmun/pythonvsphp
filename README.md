# pythonvsphp
PDF merging benchmark for Python and PHP
- I used `time` command for benchmarking
- Ubuntu 14.04, 64 bit, Intel® Core™ i5-5200U CPU @ 2.20GHz × 4 , 8GB RAM

    time php mymerger.php
    time python basic_merging.py

## Results

| Language        | User |System  | Total |
| --- |---| ---|---|
| Python 2.7 |0.19s |0.01s| 0.198s |
| Python 3 |0.24s|0.01s | 0.257s|
| php5 | 0.05s | 0.00s | 0.055s|

______________