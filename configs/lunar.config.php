<?php

/* 陰曆各月份天數: 小月[29] 大月[30] (1882 ~ 2049)  	*/ 
/* 閏月[58:29/29, 59:30/29, 60:30/30, 95:29/30]        	*/ 

$lunar_month_day = array( 
                array(29, 30, 29, 30, 29, 30, 29, 30, 30, 29, 30, 30), /* 1882 */ 
                array(29, 29, 30, 29, 29, 30, 29, 30, 30, 30, 29, 30), /* 1883 */ 
                array(30, 29, 29, 30, 58, 30, 29, 30, 30, 29, 30, 30), /* 1884 */ 
                array(30, 29, 29, 30, 29, 29, 30, 29, 30, 29, 30, 30), /* 1885 */ 
                array(30, 29, 30, 29, 30, 29, 29, 30, 29, 30, 29, 30), /* 1886 */ 
                array(30, 30, 29, 59, 30, 29, 29, 30, 29, 30, 29, 30), /* 1887 */ 
                array(30, 29, 30, 30, 29, 30, 29, 29, 30, 29, 30, 29), /* 1888 */ 
                array(30, 29, 30, 30, 29, 30, 29, 30, 29, 30, 29, 30), /* 1889 */ 
                array(29, 59, 30, 29, 30, 29, 30, 30, 29, 30, 29, 30), /* 1890 */ 
                array(29, 30, 29, 30, 29, 30, 29, 30, 30, 29, 30, 30), /* 1891 */ 
                array(29, 29, 30, 29, 29, 59, 30, 30, 29, 30, 30, 30), /* 1892 */ 
                array(29, 29, 30, 29, 29, 30, 29, 30, 29, 30, 30, 30), /* 1893 */ 
                array(29, 30, 29, 30, 29, 29, 30, 29, 30, 29, 30, 30), /* 1894 */ 
                array(30, 29, 30, 29, 59, 29, 30, 29, 30, 29, 30, 29), /* 1895 */ 
                array(30, 30, 30, 29, 30, 29, 29, 30, 29, 30, 29, 30), /* 1896 */ 
                array(29, 30, 30, 29, 30, 29, 30, 29, 30, 29, 30, 29), /* 1897 */ 
                array(30, 29, 59, 30, 30, 29, 30, 29, 30, 29, 30, 29), /* 1898 */ 
                array(30, 29, 30, 29, 30, 29, 30, 30, 29, 30, 29, 30), /* 1899 */ 
                array(29, 30, 29, 29, 30, 29, 30, 59, 30, 30, 29, 30), /* 1900 */ 
                array(29, 30, 29, 29, 30, 29, 30, 29, 30, 30, 30, 29), /* 1901 */ 
                array(30, 29, 30, 29, 29, 30, 29, 30, 29, 30, 30, 30), /* 1902 */ 
                array(29, 30, 29, 30, 58, 30, 29, 29, 30, 30, 29, 30), /* 1903 */ 
                array(30, 30, 29, 30, 29, 29, 30, 29, 29, 30, 30, 29), /* 1904 */ 
                array(30, 30, 29, 30, 30, 29, 29, 30, 29, 30, 29, 30), /* 1905 */ 
                array(29, 30, 30, 95, 29, 30, 29, 30, 29, 30, 29, 30), /* 1906 */ 
                array(29, 30, 29, 30, 29, 30, 30, 29, 30, 29, 30, 29), /* 1907 */ 
                array(30, 29, 29, 30, 30, 29, 30, 29, 30, 30, 29, 30), /* 1908 */ 
                array(29, 59, 29, 30, 29, 30, 29, 30, 30, 30, 29, 30), /* 1909 */ 
                array(29, 30, 29, 29, 30, 29, 30, 29, 30, 30, 30, 29), /* 1910 */ 
                array(30, 29, 30, 29, 29, 59, 29, 30, 30, 29, 30, 30), /* 1911 */ 
                array(30, 29, 30, 29, 29, 30, 29, 29, 30, 30, 29, 30), /* 1912 */ 
                array(30, 30, 29, 30, 29, 29, 30, 29, 29, 30, 29, 30), /* 1913 */ 
                array(30, 30, 29, 30, 95, 29, 30, 29, 30, 29, 29, 30), /* 1914 */ 
                array(30, 29, 30, 30, 29, 30, 29, 30, 29, 30, 29, 30), /* 1915 */ 
                array(29, 30, 29, 30, 29, 30, 30, 29, 30, 29, 30, 29), /* 1916 */ 
                array(30, 58, 30, 29, 30, 30, 29, 30, 30, 29, 30, 29), /* 1917 */ 
                array(30, 29, 29, 30, 29, 30, 29, 30, 30, 29, 30, 30), /* 1918 */ 
                array(29, 30, 29, 29, 30, 29, 95, 30, 29, 30, 30, 30), /* 1919 */ 
                array(29, 30, 29, 29, 30, 29, 29, 30, 30, 29, 30, 30), /* 1920 */ 
                array(30, 29, 30, 29, 29, 30, 29, 29, 30, 29, 30, 30), /* 1921 */ 
                array(30, 29, 30, 30, 58, 30, 29, 29, 30, 29, 30, 30), /* 1922 */ 
                array(29, 30, 30, 29, 30, 29, 30, 29, 29, 30, 29, 30), /* 1923 */ 
                array(29, 30, 30, 29, 30, 30, 29, 30, 29, 30, 29, 29), /* 1924 */ 
                array(30, 29, 30, 95, 30, 29, 30, 30, 29, 30, 29, 30), /* 1925 */ 
                array(29, 29, 30, 29, 30, 29, 30, 30, 29, 30, 30, 29), /* 1926 */ 
                array(30, 29, 29, 30, 29, 30, 29, 30, 29, 30, 30, 30), /* 1927 */ 
                array(29, 59, 29, 30, 29, 29, 30, 29, 30, 30, 30, 30), /* 1928 */ 
                array(29, 30, 29, 29, 30, 29, 29, 30, 29, 30, 30, 30), /* 1929 */ 
                array(29, 30, 30, 29, 29, 59, 29, 30, 29, 30, 30, 29), /* 1930 */ 
                array(30, 30, 29, 30, 29, 30, 29, 29, 30, 29, 30, 29), /* 1931 */ 
                array(30, 30, 30, 29, 30, 29, 30, 29, 29, 30, 29, 30), /* 1932 */ 
                array(29, 30, 30, 29, 60, 29, 30, 29, 30, 29, 29, 30), /* 1933 */ 
                array(29, 30, 29, 30, 30, 29, 30, 29, 30, 30, 29, 30), /* 1934 */ 
                array(29, 29, 30, 29, 30, 29, 30, 30, 29, 30, 30, 29), /* 1935 */ 
                array(30, 29, 95, 29, 29, 30, 30, 29, 30, 30, 30, 29), /* 1936 */ 
                array(30, 29, 29, 30, 29, 29, 30, 29, 30, 30, 30, 29), /* 1937 */ 
                array(30, 30, 29, 29, 30, 29, 95, 29, 30, 30, 29, 30), /* 1938 */ 
                array(30, 30, 29, 29, 30, 29, 29, 30, 29, 30, 29, 30), /* 1939 */ 
                array(30, 30, 29, 30, 29, 30, 29, 29, 30, 29, 30, 29), /* 1940 */ 
                array(30, 30, 29, 30, 30, 95, 29, 29, 30, 29, 30, 29), /* 1941 */ 
                array(30, 29, 30, 30, 29, 30, 29, 30, 29, 30, 29, 30), /* 1942 */ 
                array(29, 30, 29, 30, 29, 30, 30, 29, 30, 29, 30, 29), /* 1943 */ 
                array(30, 29, 30, 95, 29, 30, 29, 30, 30, 29, 30, 30), /* 1944 */ 
                array(29, 29, 30, 29, 29, 30, 29, 30, 30, 30, 29, 30), /* 1945 */ 
                array(30, 29, 29, 30, 29, 29, 30, 29, 30, 30, 29, 30), /* 1946 */ 
                array(30, 59, 29, 30, 29, 29, 30, 29, 30, 29, 30, 30), /* 1947 */ 
                array(30, 29, 30, 29, 30, 29, 29, 30, 29, 30, 29, 30), /* 1948 */ 
                array(30, 29, 30, 30, 29, 30, 58, 30, 29, 30, 29, 30), /* 1949 */ 
                array(29, 30, 30, 29, 30, 30, 29, 29, 30, 29, 30, 29), /* 1950 */ 
                array(30, 29, 30, 30, 29, 30, 29, 30, 29, 30, 29, 30), /* 1951 */ 
                array(29, 30, 29, 30, 95, 29, 30, 30, 29, 30, 29, 30), /* 1952 */ 
                array(29, 30, 29, 29, 30, 30, 29, 30, 30, 29, 30, 29), /* 1953 */ 
                array(30, 29, 30, 29, 29, 30, 29, 30, 30, 29, 30, 30), /* 1954 */ 
                array(29, 30, 95, 29, 29, 30, 29, 30, 29, 30, 30, 30), /* 1955 */ 
                array(29, 30, 29, 30, 29, 29, 30, 29, 30, 29, 30, 30), /* 1956 */ 
                array(30, 29, 30, 29, 30, 29, 29, 59, 30, 29, 30, 29), /* 1957 */ 
                array(30, 30, 30, 29, 30, 29, 29, 30, 29, 30, 29, 30), /* 1958 */ 
                array(29, 30, 30, 29, 30, 29, 30, 29, 30, 29, 30, 29), /* 1959 */ 
                array(30, 29, 30, 29, 30, 59, 30, 29, 30, 29, 30, 29), /* 1960 */ 
                array(30, 29, 30, 29, 30, 29, 30, 30, 29, 30, 29, 30), /* 1961 */ 
                array(29, 30, 29, 29, 30, 29, 30, 30, 29, 30, 30, 29), /* 1962 */ 
                array(30, 29, 30, 58, 30, 29, 30, 29, 30, 30, 30, 29), /* 1963 */ 
                array(30, 29, 30, 29, 29, 30, 29, 30, 29, 30, 30, 30), /* 1964 */ 
                array(29, 30, 29, 30, 29, 29, 30, 29, 29, 30, 30, 29), /* 1965 */ 
                array(30, 30, 59, 30, 29, 29, 30, 29, 29, 30, 30, 29), /* 1966 */ 
                array(30, 30, 29, 30, 30, 29, 29, 30, 29, 30, 29, 30), /* 1967 */ 
                array(29, 30, 29, 30, 30, 29, 59, 30, 29, 30, 29, 30), /* 1968 */ 
                array(29, 30, 29, 30, 29, 30, 30, 29, 30, 29, 30, 29), /* 1969 */ 
                array(30, 29, 29, 30, 29, 30, 30, 29, 30, 30, 29, 30), /* 1970 */ 
                array(29, 30, 29, 29, 59, 30, 29, 30, 30, 30, 29, 30), /* 1971 */ 
                array(29, 30, 29, 29, 30, 29, 30, 29, 30, 30, 29, 30), /* 1972 */ 
                array(30, 29, 30, 29, 29, 30, 29, 29, 30, 30, 29, 30), /* 1973 */ 
                array(30, 30, 29, 59, 29, 30, 29, 29, 30, 30, 29, 30), /* 1974 */ 
                array(30, 30, 29, 30, 29, 29, 30, 29, 29, 30, 29, 30), /* 1975 */ 
                array(30, 30, 29, 30, 29, 30, 29, 59, 29, 30, 29, 30), /* 1976 */ 
                array(30, 29, 30, 30, 29, 30, 29, 30, 29, 30, 29, 29), /* 1977 */ 
                array(30, 29, 30, 30, 29, 30, 30, 29, 30, 29, 30, 29), /* 1978 */ 
                array(30, 29, 29, 30, 29, 60, 29, 30, 30, 29, 30, 29), /* 1979 */ 
                array(30, 29, 29, 30, 29, 30, 29, 30, 30, 29, 30, 30), /* 1980 */ 
                array(29, 30, 29, 29, 30, 29, 29, 30, 30, 29, 30, 30), /* 1981 */ 
                array(30, 29, 30, 58, 30, 29, 29, 30, 29, 30, 30, 30), /* 1982 */ 
                array(30, 29, 30, 29, 29, 30, 29, 29, 30, 29, 30, 30), /* 1983 */ 
                array(30, 29, 30, 30, 29, 29, 30, 29, 29, 59, 30, 30), /* 1984 */ 
                array(29, 30, 30, 29, 30, 29, 30, 29, 29, 30, 29, 30), /* 1985 */ 
                array(29, 30, 30, 29, 30, 30, 29, 30, 29, 30, 29, 29), /* 1986 */ 
                array(30, 29, 30, 29, 30, 59, 30, 30, 29, 30, 29, 29), /* 1987 */ 
                array(30, 29, 30, 29, 30, 29, 30, 30, 29, 30, 30, 29), /* 1988 */ 
                array(30, 29, 29, 30, 29, 29, 30, 30, 29, 30, 30, 30), /* 1989 */ 
                array(29, 30, 29, 29, 59, 29, 30, 29, 30, 30, 30, 30), /* 1990 */ 
                array(29, 30, 29, 29, 30, 29, 29, 30, 29, 30, 30, 30), /* 1991 */ 
                array(29, 30, 30, 29, 29, 30, 29, 29, 30, 29, 30, 30), /* 1992 */ 
                array(29, 30, 59, 30, 29, 30, 29, 29, 30, 29, 30, 29), /* 1993 */ 
                array(30, 30, 30, 29, 30, 29, 30, 29, 29, 30, 29, 30), /* 1994 */ 
                array(29, 30, 30, 29, 30, 29, 30, 59, 29, 30, 29, 30), /* 1995 */ 
                array(29, 30, 29, 30, 30, 29, 30, 29, 30, 30, 29, 29), /* 1996 */ 
                array(30, 29, 30, 29, 30, 29, 30, 30, 29, 30, 30, 29), /* 1997 */ 
                array(30, 29, 29, 30, 58, 30, 30, 29, 30, 30, 29, 30), /* 1998 */ 
                array(30, 29, 29, 30, 29, 29, 30, 29, 30, 30, 30, 29), /* 1999 */ 
                array(30, 30, 29, 29, 30, 29, 29, 30, 29, 30, 30, 29), /* 2000 */ 
                array(30, 30, 29, 59, 30, 29, 29, 30, 29, 30, 29, 30), /* 2001 */ 
                array(30, 30, 29, 30, 29, 30, 29, 29, 30, 29, 30, 29), /* 2002 */ 
                array(30, 30, 29, 30, 30, 29, 30, 29, 29, 30, 29, 30), /* 2003 */ 
                array(29, 59, 30, 30, 29, 30, 29, 30, 29, 30, 29, 30), /* 2004 */ 
                array(29, 30, 29, 30, 29, 30, 30, 29, 30, 29, 30, 29), /* 2005 */ 
                array(30, 29, 30, 29, 30, 29, 59, 30, 30, 29, 30, 30), /* 2006 */ 
                array(29, 29, 30, 29, 29, 30, 29, 30, 30, 30, 29, 30), /* 2007 */ 
                array(30, 29, 29, 30, 29, 29, 30, 29, 30, 30, 29, 30), /* 2008 */ 
                array(30, 30, 29, 29, 59, 29, 30, 29, 30, 29, 30, 30), /* 2009 */ 
                array(30, 29, 30, 29, 30, 29, 29, 30, 29, 30, 29, 30), /* 2010 */ 
                array(30, 29, 30, 30, 29, 30, 29, 29, 30, 29, 30, 29), /* 2011 */ 
                array(30, 29, 30, 59, 30, 29, 30, 29, 30, 29, 30, 29), /* 2012 */ 
                array(30, 29, 30, 30, 29, 30, 29, 30, 29, 30, 29, 30), /* 2013 */ 
                array(29, 30, 29, 30, 29, 30, 29, 30, 59, 30, 29, 30), /* 2014 */ 
                array(29, 30, 29, 29, 30, 29, 30, 30, 30, 29, 30, 29), /* 2015 */ 
                array(30, 29, 30, 29, 29, 30, 29, 30, 30, 29, 30, 30), /* 2016 */ 
                array(29, 30, 29, 30, 29, 95, 29, 30, 29, 30, 30, 30), /* 2017 */ 
                array(29, 30, 29, 30, 29, 29, 30, 29, 30, 29, 30, 30), /* 2018 */ 
                array(29, 30, 30, 29, 30, 29, 29, 30, 29, 29, 30, 30), /* 2019 */ 
                array(29, 30, 30, 59, 30, 29, 29, 30, 29, 30, 29, 30), /* 2020 */ 
                array(29, 30, 30, 29, 30, 29, 30, 29, 30, 29, 30, 29), /* 2021 */ 
                array(30, 29, 30, 29, 30, 30, 29, 30, 29, 30, 29, 30), /* 2022 */ 
                array(29, 59, 30, 29, 30, 29, 30, 30, 29, 30, 29, 30), /* 2023 */ 
                array(29, 30, 29, 29, 30, 29, 30, 30, 29, 30, 30, 29), /* 2024 */ 
                array(30, 29, 30, 29, 29, 59, 30, 29, 30, 30, 30, 29), /* 2025 */ 
                array(30, 29, 30, 29, 29, 30, 29, 29, 30, 30, 30, 29), /* 2026 */ 
                array(30, 30, 29, 30, 29, 29, 30, 29, 29, 30, 30, 29), /* 2027 */ 
                array(30, 30, 30, 29, 59, 29, 30, 29, 29, 30, 30, 29), /* 2028 */ 
                array(30, 30, 29, 30, 29, 30, 29, 30, 29, 29, 30, 29), /* 2029 */ 
                array(30, 30, 29, 30, 30, 29, 30, 29, 30, 29, 30, 29), /* 2030 */ 
                array(29, 30, 59, 30, 29, 30, 30, 29, 30, 29, 30, 30), /* 2031 */ 
                array(30, 29, 29, 30, 29, 30, 30, 29, 30, 30, 29, 30), /* 2032 */ 
                array(29, 30, 29, 29, 30, 29, 59, 30, 30, 30, 29, 30), /* 2033 */ 
                array(29, 30, 29, 29, 30, 29, 30, 29, 30, 29, 29, 30), /* 2034 */ 
                array(30, 29, 30, 29, 29, 30, 29, 29, 30, 30, 29, 30), /* 2035 */ 
                array(30, 30, 29, 30, 29, 95, 29, 29, 30, 29, 30, 30), /* 2036 */ 
                array(30, 30, 29, 30, 29, 29, 30, 29, 29, 30, 29, 30), /* 2037 */ 
                array(30, 30, 29, 30, 29, 30, 29, 30, 29, 29, 30, 29), /* 2038 */ 
                array(30, 30, 29, 30, 59, 30, 29, 30, 29, 30, 29, 29), /* 2039 */ 
                array(30, 29, 30, 30, 29, 30, 29, 30, 30, 29, 30, 29), /* 2040 */ 
                array(29, 30, 29, 30, 29, 30, 30, 29, 30, 30, 29, 30), /* 2041 */ 
                array(29, 59, 29, 30, 29, 30, 29, 30, 30, 29, 30, 30), /* 2042 */ 
                array(29, 30, 29, 29, 30, 29, 29, 30, 30, 29, 30, 30), /* 2043 */ 
                array(30, 29, 30, 29, 29, 30, 58, 30, 29, 30, 30, 30), /* 2044 */ 
                array(30, 29, 30, 29, 29, 30, 29, 29, 30, 29, 30, 30), /* 2045 */ 
                array(30, 29, 30, 29, 30, 29, 30, 29, 29, 30, 29, 30), /* 2046 */ 
                array(30, 29, 30, 30, 95, 29, 30, 29, 29, 30, 29, 30), /* 2047 */ 
                array(29, 30, 30, 29, 30, 30, 29, 30, 29, 29, 30, 29), /* 2048 */ 
                array(30, 29, 30, 29, 30, 30, 29, 30, 30, 29, 30, 30)  /* 2049 */ 
); 
?>